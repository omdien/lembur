<x-app-layout>
    <x-slot name="title">
        Detil Lembur
    </x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Detail Lembur') }}
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
                        LAPORAN HASIL LEMBUR
                    </div>
                    <div class="flex-auto">
                        <div class="flex gap-4">
                            <div class="basis-20">Nama</div> 
                            <div>:</div> 
                            <div class="flex-auto">{{ $lembur->Supel->User->name }}</div>
                        </div>
                        <div class="flex gap-4">
                            <div class="basis-20">NIP</div> 
                            <div>:</div> 
                            <div class="flex-auto">{{ $lembur->Supel->User->nip }}</div>
                        </div>
                        <div class="flex gap-4">
                            <div class="basis-20">Pangkat</div> 
                            <div>:</div> 
                            <div class="flex-auto">{{ $lembur->Supel->User->pangkat }}</div>
                        </div>
                        <div class="flex gap-4">
                            <div class="basis-20">Jabatan</div> 
                            <div>:</div> 
                            <div class="flex-auto">{{ $lembur->Supel->User->jabatan }}</div>
                        </div>
                    </div>
                    <div class="flex-auto">
                        <div class="flex gap-4">
                            <div class="basis-20">A.</div> 
                            <div>Dasar</div> 
                        </div>
                        <div class="flex gap-4">
                            <div class="basis-20"></div> 
                            <div>Surat Perintah Kerja Lembur Kepala Kantor Stasiun Karantina Ikan Pengendalian Mutu dan Keamanan Hasil Perikanan Merak, tanggal 18 April 2023 dengan Nomor: B.614/SKIPM.MER/ KP.440/IV/2023</div> 
                        </div>
                    </div>
                    <div class="flex-auto">
                        <div class="flex gap-4">
                            <div class="basis-20">B.</div> 
                            <div>Maksud dan Tujuan</div> 
                        </div>
                        <div class="flex gap-4">
                            <div class="basis-20"></div> 
                            <div class="flex">
                                <div class="basis-20">Maksud :</div> 
                                <div>{{ $lembur->lem_maksud }}</div>
                            </div> 
                        </div>
                        <div class="flex gap-4">
                            <div class="basis-20"></div> 
                            <div class="flex">
                                <div class="basis-20">Tujuan :</div> 
                                <div>{{ $lembur->lem_tujuan }}</div>
                            </div> 
                        </div>
                    </div>
                    <div class="flex-auto">
                        <div class="flex gap-4">
                            <div class="basis-20">C.</div> 
                            <div>Waktu dan Tempat</div> 
                        </div>
                        <div class="flex gap-4">
                            <div class="basis-20"></div> 
                            <div class="flex">
                                <div class="basis-20">Waktu :</div> 
                                <div>{{ $lembur->lem_tanggal }}</div>
                            </div> 
                        </div>
                        <div class="flex gap-4">
                            <div class="basis-20"></div> 
                            <div class="flex">
                                <div class="basis-20">Tempat :</div> 
                                <div>{{ $lembur->lem_tempat }}</div>
                            </div> 
                        </div>
                    </div>
                    <div class="flex-auto">
                        <div class="flex gap-4">
                            <div class="basis-20">D.</div> 
                            <div>Hasil Yang Dicapai</div> 
                        </div>
                        <div class="flex gap-4">
                            <div class="basis-20"></div> 
                            <div>{{ $lembur->lem_hasil }}</div> 
                        </div>
                    </div>
                    <div class="flex-auto">
                        <div class="flex gap-4">
                            <div class="basis-20">E.</div> 
                            <div>Screenshoot hasil kegiatan</div> 
                        </div>
                        <div class="flex gap-4">
                            <div class="basis-20"></div> 
                            <div>Photo dan Screenshoot</div> 
                        </div>
                    </div>
                    <div class="flex mt-5">
                        <div class="basis-1/2"></div>
                        <div class="basis-1/2">
                            <div class="text-center">Merak, ...</div>
                            <div class="text-center">Yang Melaksanakan Lembur,</div>
                            <div class="text-center mt-20">{{ $lembur->Supel->User->name }}</div>
                            <div class="text-center">NIP.  {{ $lembur->Supel->User->nip }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
