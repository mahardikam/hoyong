@extends('frontend.layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="container my-5" style="margin-top: 10%;">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="p-4 border rounded" style="border-color: #ddd;">
                <h1 class="text-center mb-4">Kontak Kami</h1>
                <p class="text-center">
                    Kami senang mendengar dari Anda. Apakah Anda memiliki pertanyaan tentang produk, harga, atau hal
                    lainnya?
                    Tim kami siap menjawab semua pertanyaan Anda. 😊
                </p>

                <form action="#" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name"
                                style="border: 2px solid #333; border-radius: 5px;" required>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                style="border: 2px solid #333; border-radius: 5px;" required>
                        </div>
                    </div>
                    <br>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek:</label>
                        <input type="text" class="form-control" id="subject" name="subject"
                            style="border: 2px solid #333; border-radius: 5px;" required>
                    </div>
                    <br>

                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan:</label> <br>
                        <textarea class="form-control" id="message" name="message" rows="10" cols="100"
                            style="border: 2px solid #333; border-radius: 5px;" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mb-3">Kirim Pesan</button>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection