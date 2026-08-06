<?php
$headerPath = '/home/zorin/Descargas/public_html/app/views/layouts/header.php';
$footerPath = '/home/zorin/Descargas/public_html/app/views/layouts/footer.php';
$layoutPath = '/home/zorin/Descargas/penalito-laravel/resources/views/layouts/app.blade.php';

if (!is_dir(dirname($layoutPath))) {
    mkdir(dirname($layoutPath), 0777, true);
}

$header = file_get_contents($headerPath);
$footer = file_get_contents($footerPath);

$layout = $header . "\n\n        @yield('content')\n\n" . $footer;

// Convert <?php echo URLROOT; ?>/assets... to {{ asset('assets...') }}
$layout = str_replace('<?php echo URLROOT; ?>/assets/', "{{ asset('assets/') }}", $layout);
$layout = str_replace('<?php echo URLROOT; ?>/video/', "{{ asset('video/') }}", $layout);

// Convert <?php echo URLROOT; ?>/ to {{ url('/') }}/
$layout = str_replace('<?php echo URLROOT; ?>/', "{{ url('/') }}/", $layout);
$layout = str_replace('href="<?php echo URLROOT; ?>"', 'href="{{ url(\'/\') }}"', $layout);

// Replace title
$layout = str_replace('<?php echo isset($data[\'title\']) ? $data[\'title\'] : SITENAME; ?>', '{{ $title ?? config(\'app.name\') }}', $layout);

// Replace date('Y')
$layout = str_replace('<?php echo date(\'Y\'); ?>', '{{ date(\'Y\') }}', $layout);

file_put_contents($layoutPath, $layout);
echo "Layout created at $layoutPath\n";
