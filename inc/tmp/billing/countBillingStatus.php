<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Billing"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">كل الفواتير</p>
                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getCountReturn($db,"ID","bill","")); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Check"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">تم الدفع</p>
                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getCountReturn($db,"ID","bill"," WHERE status = 1")); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Close-Window"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">لم يتم الدفع</p>
                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getCountReturn($db,"ID","bill"," WHERE status = 2")); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Danger"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">متأخرة</p>
                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getCountReturn($db,"ID","bill"," WHERE status = 2")); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>