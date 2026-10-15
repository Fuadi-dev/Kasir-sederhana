<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 p-8 font-sans">

    <div class="max-w-2xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Tambah Data Barang</h2>
            <a href="{{ url('/') }}" class="text-gray-500 hover:text-gray-700 transition-colors flex items-center gap-1 text-sm font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden p-6">
            <form action="{{ url('/post-barang') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="kode_barang" class="block mb-2 text-sm font-medium text-gray-700">Kode Barang</label>
                    <input type="text" id="kode_barang" name="kode_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none transition-colors" placeholder="Contoh: BRG-001" required>
                </div>

                <div class="mb-5">
                    <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-700">Nama Barang</label>
                    <input type="text" id="nama_barang" name="nama_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none transition-colors" placeholder="Masukkan nama barang" required>
                </div>

                <div class="grid grid-cols-2 gap-5 mb-6">
                    <div>
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-700">Harga (Rp)</label>
                        <input type="number" id="harga" name="harga_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none transition-colors" placeholder="0" required>
                    </div>
                    <div>
                        <label for="stok" class="block mb-2 text-sm font-medium text-gray-700">Stok</label>
                        <input type="number" id="stok" name="stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none transition-colors" placeholder="0" required>
                    </div>
                </div>

                <div class="flex justify-end gap-3 border-t border-gray-100 pt-5 mt-2">
                    <button type="reset" class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-200 transition-colors">
                        Reset
                    </button>
                    <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-colors">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
