<x-app-layout>
    <x-slot name="title">
        About
    </x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Surat Perintah Lembur') }}
        </h2>
    </x-slot>
    <link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("ini tentang about page") }} --}}
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Nomor Surat</th>
                                    <th scope="col" class="px-6 py-4">Tanggal</th>
                                    <th scope="col" class="px-6 py-4">Keterangan</th>
                                    <th scope="col" class="px-6 py-4">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    @foreach ($supel as $supol)
                                    <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $no}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $supol->sup_nomor}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ date("d/m/Y", $supol->sup_tanggal)}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ substr($supol->sup_keterangan,0,50) }} ...</td>
                                    <td class="p-3 ">
                                        <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                            <i class="material-icons-outlined text-base">visibility</i>
                                        </a>
                                        <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                            <i class="material-icons-outlined text-base">edit</i>
                                        </a>
                                        <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                            <i class="material-icons-round text-base">delete_outline</i>
                                        </a>
						            </td>
                                    </tr>
                                    <?php $no = $no + 1 ?>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
