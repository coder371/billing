<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Empty-Box"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">عدد المنتجات</p>
                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getCountReturn($db,"ID","producer","")); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Close"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">نفذ بالكامل</p>
                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getCountReturn($db,"ID","producer"," WHERE status = 0")); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Remove-Cart"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">على وشك النفاذ</p>
                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getCountReturn($db,"ID","producer"," WHERE status = 2")); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Danger"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">غير متاح للبيع</p>
                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getCountReturn($db,"ID","producer"," WHERE available = 2")); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Remove-Cart"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">محذوف</p>
                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo number_format(getCountReturn($db,"ID","producer"," WHERE available = 0")); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>