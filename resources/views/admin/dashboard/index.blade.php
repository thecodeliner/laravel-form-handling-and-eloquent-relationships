@extends('admin.layouts.master')

@section('content')
  <main class="px-4 py-6 sm:px-6 lg:px-8">
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Dashboard Overview</h1>
                    <p class="text-gray-600">Welcome back, John! Here's what's happening with your blog today.</p>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                                    <i class="fas fa-newspaper text-white text-xl"></i>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Total Articles
                                    </dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900">
                                            42
                                        </div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                            <i class="fas fa-arrow-up text-xs"></i>
                                            <span class="sr-only">Increased by</span>
                                            12% from last month
                                        </div>
                                    </dd>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-purple-500 rounded-md p-3">
                                    <i class="fas fa-eye text-white text-xl"></i>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Total Views
                                    </dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900">
                                            5,248
                                        </div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                            <i class="fas fa-arrow-up text-xs"></i>
                                            <span class="sr-only">Increased by</span>
                                            24% from last month
                                        </div>
                                    </dd>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                                    <i class="fas fa-comments text-white text-xl"></i>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Comments
                                    </dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900">
                                            128
                                        </div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                            <i class="fas fa-arrow-up text-xs"></i>
                                            <span class="sr-only">Increased by</span>
                                            8% from last month
                                        </div>
                                    </dd>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                                    <i class="fas fa-thumbs-up text-white text-xl"></i>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Likes
                                    </dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900">
                                            842
                                        </div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-red-600">
                                            <i class="fas fa-arrow-down text-xs"></i>
                                            <span class="sr-only">Decreased by</span>
                                            3% from last month
                                        </div>
                                    </dd>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <div class="lg:col-span-2 bg-white shadow rounded-lg overflow-hidden">
                        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Recent Articles</h3>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="px-4 py-4 sm:px-6 hover:bg-gray-50">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="min-w-0 flex-1">
                                            <div class="flex items-center text-sm text-gray-500 mb-1">
                                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs mr-2">Web Development</span>
                                                <span>Published May 15, 2023</span>
                                            </div>
                                            <h4 class="text-md font-medium text-gray-900 truncate">The Future of Web Development in 2023</h4>
                                            <div class="mt-2 flex">
                                                <span class="inline-flex items-center text-sm">
                                                    <span class="text-gray-500"><i class="fas fa-eye mr-1"></i> 1,248 views</span>
                                                    <span class="mx-2">•</span>
                                                    <span class="text-gray-500"><i class="far fa-comment mr-1"></i> 8 comments</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="text-blue-600 hover:text-blue-800">View</a>
                                    </div>
                                </div>
                            </div>

                            <div class="px-4 py-4 sm:px-6 hover:bg-gray-50">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="min-w-0 flex-1">
                                            <div class="flex items-center text-sm text-gray-500 mb-1">
                                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs mr-2">React</span>
                                                <span>Published July 5, 2023</span>
                                            </div>
                                            <h4 class="text-md font-medium text-gray-900 truncate">React 18: What's New and Improved</h4>
                                            <div class="mt-2 flex">
                                                <span class="inline-flex items-center text-sm">
                                                    <span class="text-gray-500"><i class="fas fa-eye mr-1"></i> 980 views</span>
                                                    <span class="mx-2">•</span>
                                                    <span class="text-gray-500"><i class="far fa-comment mr-1"></i> 5 comments</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="text-blue-600 hover:text-blue-800">View</a>
                                    </div>
                                </div>
                            </div>

                            <div class="px-4 py-4 sm:px-6 hover:bg-gray-50">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="min-w-0 flex-1">
                                            <div class="flex items-center text-sm text-gray-500 mb-1">
                                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs mr-2">TypeScript</span>
                                                <span>Published June 22, 2023</span>
                                            </div>
                                            <h4 class="text-md font-medium text-gray-900 truncate">TypeScript 5.0: Advanced Features Explained</h4>
                                            <div class="mt-2 flex">
                                                <span class="inline-flex items-center text-sm">
                                                    <span class="text-gray-500"><i class="fas fa-eye mr-1"></i> 850 views</span>
                                                    <span class="mx-2">•</span>
                                                    <span class="text-gray-500"><i class="far fa-comment mr-1"></i> 3 comments</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="text-blue-600 hover:text-blue-800">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-4 sm:px-6 border-t border-gray-200 bg-gray-50 text-right">
                            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">View all articles</a>
                        </div>
                    </div>

                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Quick Stats</h3>
                        </div>
                        <div class="px-4 py-5 sm:p-6">
                            <div class="space-y-6">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 mb-3">Top Categories</h4>
                                    <div class="space-y-2">
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-medium text-gray-900">Web Development</span>
                                            <span class="text-sm text-gray-500">12 articles</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
                                        </div>

                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-medium text-gray-900">React</span>
                                            <span class="text-sm text-gray-500">8 articles</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: 40%"></div>
                                        </div>

                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-medium text-gray-900">TypeScript</span>
                                            <span class="text-sm text-gray-500">5 articles</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: 25%"></div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 mb-3">Popular Tags</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs">#javascript</span>
                                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs">#react</span>
                                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs">#webdev</span>
                                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs">#typescript</span>
                                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs">#css</span>
                                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs">#performance</span>
                                    </div>
                                </div>

                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 mb-3">Recent Comments</h4>
                                    <div class="space-y-3">
                                        <div class="text-sm">
                                            <p class="text-gray-900 font-medium">"Great article! WebAssembly is really changing the game."</p>
                                            <p class="text-gray-500">Sarah Johnson on <a href="#" class="text-blue-600">The Future of Web Development</a></p>
                                        </div>
                                        <div class="text-sm">
                                            <p class="text-gray-900 font-medium">"The new concurrent rendering is a game changer."</p>
                                            <p class="text-gray-500">Michael Chen on <a href="#" class="text-blue-600">React 18 Features</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Traffic Sources</h3>
                        </div>
                        <div class="px-4 py-5 sm:p-6">
                            <div class="h-64 flex items-center justify-center">
                                <div class="text-center text-gray-500">
                                    <i class="fas fa-chart-pie text-4xl mb-2"></i>
                                    <p>Traffic sources chart</p>
                                </div>
                            </div>
                            <div class="mt-6 grid grid-cols-3 gap-4 text-center">
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Direct</p>
                                    <p class="text-xl font-semibold text-gray-900">42%</p>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Search</p>
                                    <p class="text-xl font-semibold text-gray-900">32%</p>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Social</p>
                                    <p class="text-xl font-semibold text-gray-900">26%</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Performance Metrics</h3>
                        </div>
                        <div class="px-4 py-5 sm:p-6">
                            <div class="h-64 flex items-center justify-center">
                                <div class="text-center text-gray-500">
                                    <i class="fas fa-chart-line text-4xl mb-2"></i>
                                    <p>Performance metrics chart</p>
                                </div>
                            </div>
                            <div class="mt-6 grid grid-cols-3 gap-4 text-center">
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Avg. Read Time</p>
                                    <p class="text-xl font-semibold text-gray-900">4.2 min</p>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Bounce Rate</p>
                                    <p class="text-xl font-semibold text-gray-900">28%</p>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Pages/Session</p>
                                    <p class="text-xl font-semibold text-gray-900">2.6</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
 @endsection
