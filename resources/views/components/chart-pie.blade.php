<div class="col-xl col-lg">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">รายได้สุทธิ</h6>
            <div -class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                     aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">ตัวเลือก: </div>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-sync fa-sm fa-fw mr-2 text-gray-400"></i>รีเฟรซ</a>
                    <a class="dropdown-item" href="#">นำออกข้อมูล</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">ล้างข้อมูล</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-pie pt-4 pb-2">
                <canvas id="donutChart"></canvas>
            </div>
            <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
            </div>
        </div>
    </div>
</div>
