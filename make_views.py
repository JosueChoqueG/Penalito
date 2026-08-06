import os
import glob

views_dir = '/home/zorin/Descargas/public_html/app/views/pages'
dest_dir = '/home/zorin/Descargas/penalito-laravel/resources/views/pages'

os.makedirs(dest_dir, exist_ok=True)

php_files = glob.glob(os.path.join(views_dir, '*.php'))

for php_file in php_files:
    filename = os.path.basename(php_file)
    basename, _ = os.path.splitext(filename)
    blade_file = os.path.join(dest_dir, f"{basename}.blade.php")
    
    with open(php_file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Replace layout includes
    content = content.replace("<?php require APPROOT . '/views/layouts/header.php'; ?>", "@extends('layouts.app')\n@section('content')")
    content = content.replace("<?php require APPROOT . '/views/layouts/footer.php'; ?>", "@endsection")
    
    # Replace URLROOT/assets...
    content = content.replace('<?php echo URLROOT; ?>/assets/', "{{ asset('assets/') }}")
    content = content.replace('<?php echo URLROOT; ?>/video/', "{{ asset('video/') }}")
    
    # Replace generic URLROOT
    content = content.replace('<?php echo URLROOT; ?>/', "{{ url('/') }}/")
    content = content.replace('href="<?php echo URLROOT; ?>"', 'href="{{ url(\'/\') }}"')
    
    with open(blade_file, 'w', encoding='utf-8') as f:
        f.write(content)
        
    print(f"Converted {filename} to {basename}.blade.php")
