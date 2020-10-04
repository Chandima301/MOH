<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>


<div class="col-md-10 tab" id="Area">
    <div class="tab-heading">
        <h5>MOH(Medical Officer Of Health) Office Kelaniya</h5>
    </div>
    <hr>
    <h6>Notifications</h6>
    <div class='alert alert-info mx-auto mt-2' id='nonotifications' style="display: none;">
        <p>No notifications</p>
    </div>
    <div class="list-group mt-2">
        <?php foreach ($this->notifications as $notification) : ?>
            <a href="<?= PROOT ?>medicalofficer/approve" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?= $notification["content"] ?></h5>
                    <small><?= Helper::time_elapsed_string($notification["date"]); ?></small>
                </div>

            </a>
        <?php endforeach; ?>

    </div> 

    <h6 class="mt-2">නව ලියාපදිංවීම් දත්ත</h6>

    <div class="col-md-6 mt-2">
        <canvas id="weight" width="500" height="300"></canvas>
    </div>

    <script src="<?= PROOT ?>/js/Chart.bundle.js"></script>

    <script>
        var ctx = document.getElementById('weight');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                label: 'Scatter Dataset',
                datasets: [{
                    label: 'Mothers',
                    data: [<?php foreach ($this->monthlydata as $month => $num) : ?>
                            {x: "<?= $month ?>",y: <?= $num ?>},
                            <?php endforeach; ?>
                            ],
                    backgroundColor: [
                        'rgba(0, 0, 0, 0)'
                    ],
                    borderColor: [
                        'rgba(0, 0, 0,1)'
                    ],
                    borderWidth: 1,

                }]
            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1,
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'No. of registrations'
                        }
                    }],
                    xAxes: [{
                        type: 'time',
                        time: {
                            unit: 'month',
                        },
                        distribution: 'series',
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }

                    }]
                }
            }
        });
    </script>



</div>

<?php $this->end(); ?>