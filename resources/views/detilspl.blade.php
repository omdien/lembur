<x-app-layout>
    <x-slot name="title">
        Detil SPL
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
                    <div class="text-center">
                        SURAT PERINTAH KERJA LEMBUR
                    </div>
                    <div class="text-center">
                    {{ $supel->sup_nomor }}
                    </div>
                    <div class="mt-5">
                        <p>Dalam rangka pelaksanaan tugas pokok dan fungsi Karantina Ikan, Pengendalian Mutu dan Keamanan Hasil Perikanan dalam lingkup Stasiun Karantina Ikan, Pengendalian Mutu dan Keamanan Hasil Perikanan Merak di wilayah Banten, maka kami menugaskan :</p>
                    </div>
                    <div class="flex gap-4">
                        <div class="basis-20">Kepada</div>
                        <div>:</div>
                        <div class="flex-auto">
                            <div class="flex gap-4">
                                <div class="basis-20">Nama</div> 
                                <div>:</div> 
                                <div class="flex-auto">{{ $supel->User->name }}</div>
                            </div>
                            <div class="flex gap-4">
                                <div class="basis-20">NIP</div> 
                                <div>:</div> 
                                <div class="flex-auto">{{ $supel->User->nip }}</div>
                            </div>
                            <div class="flex gap-4">
                                <div class="basis-20">Pangkat</div> 
                                <div>:</div> 
                                <div class="flex-auto">{{ $supel->User->pangkat }}</div>
                            </div>
                            <div class="flex gap-4">
                                <div class="basis-20">Jabatan</div> 
                                <div>:</div> 
                                <div class="flex-auto">{{ $supel->User->jabatan }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="basis-28">Untuk</div>
                        <div>:</div>
                        <div class="flex-auto">
                            <div>{{ $supel->sup_keterangan }}</div>
                            <div>2. Setelah selesai menjalankan tugasnya, diwajibkan membuat laporan secara tertulis kepada atasan langsung</div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>Demikian surat tugas ini diberikan kepada yang bersangkutan untuk dilaksanakan dengan penuh tanggungjawab.</p>
                    </div>
                    <div class="flex mt-5">
                        <div class="basis-1/2"></div>
                        <div class="basis-1/2">
                            <div class="text-center">Merak, {{ $tg_surat }}</div>
                            <div class="text-center">Kepala,</div>
                            <div class="text-center mt-20">Iromo, S.IP</div>
                            <div class="text-center">NIP.  19691031 198903 1 002</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
