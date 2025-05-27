<x-layout>
    <div class="max-h-screen-xl">
        {{-- Hero Component --}}
        <x-home.hero />

        {{-- About Us Component --}}
        <x-home.aboutus />
    </div>

    <div class="bg-gradient-to-b from-gray-800 via-gray-900 to-gray-900">
        {{-- Courses Component --}}
        <x-home.courses :courses="$courses" />

        {{-- Expert Component --}}
        <x-home.experts :tutors="$tutors" />

        {{-- Testimonies Component --}}
        <x-home.testimonies />
    </div>

    <div id="payment-confirmation-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Payment Confirmation
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="payment-confirmation-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex items-center justify-center text-green-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-center text-gray-900 dark:text-white">
                        Payment Successful!
                    </h4>
                    <div class="space-y-2 text-gray-500 dark:text-gray-400">
                        <div class="flex justify-between">
                            <span>Amount:</span>
                            <span class="font-medium text-gray-900 dark:text-white">$125.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Payment Method:</span>
                            <span class="font-medium text-gray-900 dark:text-white">VISA **** 4242</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Date:</span>
                            <span class="font-medium text-gray-900 dark:text-white">May 15, 2023</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Transaction ID:</span>
                            <span class="font-medium text-gray-900 dark:text-white">PAY-789456123</span>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="payment-confirmation-modal" type="button"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Done
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layout>

@if (session('show_payment_modal'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modalElement = document.getElementById('payment-confirmation-modal');

            if (modalElement) {
                const modal = new Modal(modalElement);
                modal.show();
            }
        });
    </script>
@endif
