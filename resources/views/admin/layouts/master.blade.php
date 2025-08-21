<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBlog | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.min.js"></script>
</head>
<body class="bg-gray-50 font-sans">
   <div class="flex h-screen overflow-hidden">
        @include('admin.layouts.partials.sidebar')
        <div class="flex-1 overflow-auto">
        @include('admin.layouts.partials.header')
        
        @yield('content')    
    </div>
    

</div>

 <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const sidebar = document.getElementById('sidebar');

            mobileMenuButton.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
            });

            // Sidebar dropdown menus
            const dropdownToggles = document.querySelectorAll('.sidebar-dropdown-toggle');

            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const dropdownMenu = this.nextElementSibling;

                    // Close all other dropdowns except this one
                    document.querySelectorAll('.sidebar-dropdown-menu').forEach(menu => {
                        if (menu !== dropdownMenu) {
                            menu.classList.add('hidden');
                        }
                    });

                    // Toggle this dropdown
                    dropdownMenu.classList.toggle('hidden');
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function() {
                document.querySelectorAll('.sidebar-dropdown-menu').forEach(menu => {
                    menu.classList.add('hidden');
                });
            });

            // User dropdown menu
            const userMenuButton = document.getElementById('user-menu-button');
            const userMenu = document.getElementById('user-menu');

            userMenuButton.addEventListener('click', function(e) {
                e.stopPropagation();
                userMenu.classList.toggle('hidden');
            });

            // Close user menu when clicking outside
            document.addEventListener('click', function() {
                userMenu.classList.add('hidden');
            });
        });
    </script>
    <script src="{{ asset('asset/js/script.js') }}"></script>
</body>
</html>
