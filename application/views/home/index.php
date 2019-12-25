<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row" >
    		<!-- order-card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-blue order-card">
                    <div class="card-body">
                        <h6 class="text-white">Total Tabungan Siswa</h6>
                        <h2 class="text-right text-white"><i class="fas fa-dollar-sign float-left"></i><span>Rp.<?= number_format($tabungan->saldo) ?></span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-body">
                        <h6 class="text-white">Total Pemasukan</h6>
                        <h2 class="text-right text-white"><i class="fas fa-hand-holding-usd float-left"></i><span>1641</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-body">
                        <h6 class="text-white">Total Pengeluaran</h6>
                        <h2 class="text-right text-white"><i class="feather icon-repeat float-left"></i><span>$42,562</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-red order-card">
                    <div class="card-body">
                        <h6 class="text-white">Saldo Saat Ini</h6>
                        <h2 class="text-right text-white"><i class="feather icon-award float-left"></i><span>$9,562</span></h2>
                    </div>
                </div>
            </div>
            <!-- order-card end -->

        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->