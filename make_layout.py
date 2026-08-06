import os

header_path = '/home/zorin/Descargas/public_html/app/views/layouts/header.php'
footer_path = '/home/zorin/Descargas/public_html/app/views/layouts/footer.php'
layout_path = '/home/zorin/Descargas/penalito-laravel/resources/views/layouts/app.blade.php'

os.makedirs(os.path.dirname(layout_path), exist_ok=True)

with open(header_path, 'r', encoding='utf-8') as f:
    header = f.read()

with open(footer_path, 'r', encoding='utf-8') as f:
    footer = f.read()

layout = header + "\n\n        @yield('content')\n\n" + footer

# Replacements
layout = layout.replace('<?php echo URLROOT; ?>/assets/', "{{ asset('assets/') }}")
layout = layout.replace('<?php echo URLROOT; ?>/video/', "{{ asset('video/') }}")
layout = layout.replace('<?php echo URLROOT; ?>/', "{{ url('/') }}/")
layout = layout.replace('href="<?php echo URLROOT; ?>"', 'href="{{ url(\'/\') }}"')
layout = layout.replace("<?php echo isset($data['title']) ? $data['title'] : SITENAME; ?>", "{{ $title ?? config('app.name') }}")
layout = layout.replace("<?php echo date('Y'); ?>", "{{ date('Y') }}")

with open(layout_path, 'w', encoding='utf-8') as f:
    f.write(layout)

print("Layout created at " + layout_path)
