<?php
// ============================================
//  Static build for Netlify (Netlify PHP nahi chalata)
//  Har .php page ko HTML mein render karke dist/ mein daalta hai.
//  Local chalane ke liye:  php build.php
// ============================================

$root = __DIR__;
$dist = $root . '/dist';

// --- Mode 2: ek page render karo (alag process mein, taaki variables mix na hon) ---
if (isset($argv[1]) && $argv[1] === '--page') {
    $page = basename($argv[2]);
    chdir($root);
    $_SERVER['PHP_SELF'] = '/' . $page;     // header.php isse active menu link chunta hai
    $_SERVER['SCRIPT_NAME'] = '/' . $page;
    ob_start();
    include $root . '/' . $page;
    $html = ob_get_clean();
    // Internal links: about.php -> about.html  (index.php -> /)
    $html = preg_replace('/(href=")index\.php(#[^"]*)?"/', '$1/$2"', $html);
    $html = preg_replace('/(href=")([a-z0-9-]+)\.php(#[^"]*)?"/', '$1$2.html$3"', $html);
    echo $html;
    exit(0);
}

// --- Mode 1: poori site build karo ---
function rrmdir($d) {
    if (!is_dir($d)) return;
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($d, FilesystemIterator::SKIP_DOTS),
             RecursiveIteratorIterator::CHILD_FIRST) as $f) {
        $f->isDir() ? rmdir($f->getPathname()) : unlink($f->getPathname());
    }
    rmdir($d);
}
function rcopy($src, $dst) {
    @mkdir($dst, 0777, true);
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($src, FilesystemIterator::SKIP_DOTS),
             RecursiveIteratorIterator::SELF_FIRST) as $f) {
        $target = $dst . '/' . substr($f->getPathname(), strlen($src) + 1);
        $f->isDir() ? @mkdir($target, 0777, true) : copy($f->getPathname(), $target);
    }
}

rrmdir($dist);
mkdir($dist, 0777, true);
rcopy($root . '/assets', $dist . '/assets');

$pages = glob($root . '/*.php');
$failed = 0;
foreach ($pages as $file) {
    $page = basename($file);
    if ($page === 'build.php') continue;
    $cmd = escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg(__FILE__) . ' --page ' . escapeshellarg($page);
    exec($cmd . ' 2>&1', $out, $code);
    $html = implode("\n", $out);
    $out = [];
    if ($code !== 0 || stripos($html, '</html>') === false || preg_match('/(Warning|Fatal error|Notice|Deprecated):/', $html)) {
        fwrite(STDERR, "FAILED: $page\n" . substr($html, 0, 2000) . "\n");
        $failed++;
        continue;
    }
    file_put_contents($dist . '/' . str_replace('.php', '.html', $page), $html);
    echo "built  " . str_replace('.php', '.html', $page) . "\n";
}

if ($failed) { fwrite(STDERR, "$failed page(s) failed\n"); exit(1); }
echo "Done -> dist/\n";
