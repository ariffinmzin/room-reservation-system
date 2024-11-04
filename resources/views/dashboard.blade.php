<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-12 gap-4">
                <!-- Include the Sidebar Component -->
                <x-sidebar />

                <div class="col-span-10 p-4">
                    <!-- 10-column wide content -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                       
                            <div class="overflow-x-auto">
                                <div class="flex justify-end mb-4">
                                    <button class="btn btn-info">Info</button>
                                </div>
                                <table class="table">
                                    <!-- head -->
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Job</th>
                                            <th>Favorite Color</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- row 1 -->
                                        <tr>
                                            <th>1</th>
                                            <td>Cy Ganderton</td>
                                            <td>Quality Control Specialist</td>
                                            <td>Blue</td>
                                        </tr>
                                        <!-- row 2 -->
                                        <tr>
                                            <th>2</th>
                                            <td>Hart Hagerty</td>
                                            <td>Desktop Support Technician</td>
                                            <td>Purple</td>
                                        </tr>
                                        <!-- row 3 -->
                                        <tr>
                                            <th>3</th>
                                            <td>Brice Swyre</td>
                                            <td>Tax Accountant</td>
                                            <td>Red</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>





</x-app-layout>
