@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Invoice</h1>
      <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon-tekom.png') }}">
    </div>

    <div class="section-body">
      <div class="invoice">
        <div class="invoice-print">
          <div class="row">
            <div class="col-lg-12">
              <div class="invoice-title">
                <h2>Invoice</h2>
                <div class="invoice-number">#{{ $invoice->kode_donasi }}</div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <address>
                    <strong>Tagihan:</strong><br>
                      {{ Auth::user()->name }}<br>
                      {{ Auth::user()->email }}
                  </address>
                </div>
                <div class="col-md-6 text-md-right">
                  <address>
                    <strong>Dikirim :</strong><br>
                   TekomDonate<br>
                   Padang, Indonesia
                  </address>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <address>
                    <strong>Metode Pembayaran:</strong><br>
                    {{strtoupper($invoice->metode_pembayaran)}}
                  </address>
                </div>
                <div class="col-md-6 text-md-right">
                  <address>
                    <strong>Waktu:</strong><br>
                    {{ $invoice->waktu_donasi }}<br><br>
                  </address>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-12">
              <div class="section-title">Ringkasan Donasi</div>
              <div class="table-responsive">
                <table class="table table-striped table-hover table-md">
                  <tr>
                    <th>Judul</th>
                    <th class="text-center">Kategori</th>
                    <th class="text-center">Status Pembayaran</th>
                  </tr>
                  <tr>
                    <td>{{ $invoice->daftar->judul }}</td>
                    <td class="text-center">{{ $invoice->daftar->kategori->kategori }}</td>
                    <td class="text-center">{{ $invoice->status }}</td>
                  </tr>
                </table>
              </div>
              <div class="row mt-4">
                <div class="col-lg-8">
                  <div class="section-title">Terimakasih</div>
                  <p class="section-lead">Anda sudah membantu saudara kita yang sedang dalam kesusahaan.Semoga kebaikan anda dibalas oleh tuhan yang maha Esa</p>
                </div>
                <div class="col-lg-4 text-right">
                  <hr class="mt-2 mb-2">
                  <div class="invoice-detail-item">
                    <div class="invoice-detail-name">Jumlah Donasi</div>
                    <div class="invoice-detail-value invoice-detail-value-lg">Rp{{ number_format($invoice->jumlah, 2, ',', '.');  }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="text-md-right">
          <div class="float-lg-left mb-lg-0 mb-3">
      
          </div>
          <a href="/invoice/print/{{ $invoice->kode_donasi }}" class="btn btn-warning btn-icon icon-left" target="_blank"><i class="fas fa-print"></i> Print</a>
        </div>
      </div>
    </div>
</section>
@endsection