<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calamba Water District</title>
    <link rel="icon" type="image/png" href="/assets/icons/CWD2.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'cwd-blue': '#1E40AF',
                        'cwd-lightblue': '#3B82F6',
                        'cwd-darkblue': '#1E3A8A',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .contact-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1);
        }
        .contact-item img {
            max-width: 200px;
            height: auto;
            margin-right: 20px;
            border-radius: 10px;
            flex-shrink: 0;
        }
        .contact-item .text-content {
            flex: 1;
            text-align: left;
        }
        .contact-item h5 {
            margin-top: 0;
            color: #1E40AF;
            font-weight: 700;
            font-size: 1.25rem;
        }
        .contact-item p {
            margin: 5px 0;
            color: #374151;
        }

        .directory-table {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
            background: white;
        }
        .directory-table th,
        .directory-table td {
            padding: 12px 8px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }
        .directory-table th {
            background: linear-gradient(135deg, #1E40AF 0%, #3B82F6 100%);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.875rem;
        }
        .directory-table td {
            font-size: 0.875rem;
            color: #374151;
        }
        .directory-table tr:hover {
            background-color: #f8fafc;
        }
        .directory-table tr:nth-child(even) {
            background-color: #f9fafb;
        }
        .directory-table .dept-header {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            font-weight: 600;
            color: #1e293b;
            border-left: 4px solid #1E40AF;
        }
        .directory-table .office-name {
            font-weight: 600;
            color: #1E40AF;
        }
        .directory-table .person-name {
            font-weight: 500;
            color: #1e293b;
        }
        .directory-table .phone-number {
            color: #059669;
            font-family: 'Courier New', monospace;
        }
        .directory-table .notes {
            font-size: 0.75rem;
            color: #6b7280;
            font-style: italic;
        }
        @media (max-width: 768px) {
            .directory-table {
                font-size: 0.75rem;
            }
            .directory-table th,
            .directory-table td {
                padding: 8px 4px;
            }
            .contact-item {
                flex-direction: column;
                text-align: center;
            }
            .contact-item img {
                margin-right: 0;
                margin-bottom: 15px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white/95 backdrop-blur-md sticky top-0 z-50 shadow-sm border-b border-blue-100/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <img src="assets/icons/CWD.png" alt="Calamba Water District Logo" class="w-12 h-12 object-contain rounded-2xl shadow-lg">
                    <div>
                        <h1 class="text-2xl font-bold text-cwd-darkblue">Calamba Water District</h1>
                        <p class="text-xs text-gray-600 font-medium">Water is Life!</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                    <a href="#home" class="group relative text-gray-700 hover:text-cwd-blue transition-all duration-300 font-medium py-2">
                        <span class="relative z-10">Home</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cwd-blue group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#about" class="group relative text-gray-700 hover:text-cwd-blue transition-all duration-300 font-medium py-2">
                        <span class="relative z-10">About Us</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cwd-blue group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#services" class="group relative text-gray-700 hover:text-cwd-blue transition-all duration-300 font-medium py-2">
                        <span class="relative z-10">Services</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cwd-blue group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#statistics" class="group relative text-gray-700 hover:text-cwd-blue transition-all duration-300 font-medium py-2">
                        <span class="relative z-10">Statistics</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cwd-blue group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#projects" class="group relative text-gray-700 hover:text-cwd-blue transition-all duration-300 font-medium py-2">
                        <span class="relative z-10">Projects</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cwd-blue group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#events" class="group relative text-gray-700 hover:text-cwd-blue transition-all duration-300 font-medium py-2">
                        <span class="relative z-10">Events</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cwd-blue group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#contact" class="group relative text-gray-700 hover:text-cwd-blue transition-all duration-300 font-medium py-2">
                        <span class="relative z-10">Contacts</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cwd-blue group-hover:w-full transition-all duration-300"></div>
                    </a>
                </nav>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-btn" class="p-2 rounded-lg text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-cwd-blue">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-200 shadow-lg">
            <div class="px-4 pb-4 space-y-2">
                <a href="#home" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-cwd-blue rounded-lg transition-all duration-200 font-medium">
                    <i class="fas fa-home mr-3"></i>Home
                </a>
                <a href="#about" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-cwd-blue rounded-lg transition-all duration-200 font-medium">
                    <i class="fas fa-info-circle mr-3"></i>About Us
                </a>
                <a href="#services" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-cwd-blue rounded-lg transition-all duration-200 font-medium">
                    <i class="fas fa-cogs mr-3"></i>Services
                </a>
                <a href="#statistics" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-cwd-blue rounded-lg transition-all duration-200 font-medium">
                    <i class="fas fa-chart-bar mr-3"></i>Statistics
                </a>
                <a href="#projects" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-cwd-blue rounded-lg transition-all duration-200 font-medium">
                    <i class="fas fa-project-diagram mr-3"></i>Projects
                </a>
                <a href="#events" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-cwd-blue rounded-lg transition-all duration-200 font-medium">
                    <i class="fas fa-calendar-alt mr-3"></i>Events
                </a>
                <a href="#contact" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-cwd-blue rounded-lg transition-all duration-200 font-medium">
                    <i class="fas fa-envelope mr-3"></i>Contacts
                </a>
            </div>
        </div>
    </header>