<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>


<main role="main">
    <div class="marketing mb-5" style="border: solid black; margin-top: 50px; padding:15px">
        <div class="head">
            <h1 style="text-align: center; padding: 20px;">ගර්භනී සටහන් පොත</h1>

            <ul class="list-group tb list-group-horizontal-lg">
                <li class="list-group-item">රුධිර ඝනය</li>
                <li class="list-group-item"><input type="text" class="form-control" id="presentData5" value=""></li>
                <li class="list-group-item">ශරීර ස්කන්ධ දර්ශකය</li>
                <li class="list-group-item"><input type="text" class="form-control" id="presentData5" value=""></li>
                <li class="list-group-item">උස (සෙ.මි)</li>
                <li class="list-group-item"><input type="text" class="form-control" id="presentData5" value=""></li>
                <li class="list-group-item">අසාත්මිකතා</li>
                <li class="list-group-item"><input type="text" class="form-control" id="presentData5" value=""></li>
            </ul>
        </div>
        <div class="presentinfo" style="margin-top: 50px; border: solid black; padding: 40px; margin: 40px;">
            <div>
                <h3> 9. බර වැඩිවීමේ සටහන</h3>
                <?php if (!$this->editMode) : ?>
                    <form action="<?= PROOT ?>mother/weightChart" method="post">
                        <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                    </form>
                <?php endif; ?>
                <form action="<?= PROOT ?>mother/weightChart" method="post" style="margin: 30px;">
                    <div class="form-group row" style="font-weight: bold;">
                        <table class="table tb table-bordered">
                            <tbody>
                                <tr>
                                    <th> </th>
                                    <th colspan="3">1</th>
                                    <th colspan="3">2</th>
                                    <th colspan="3">3</th>
                                    <th colspan="3">4</th>
                                    <th colspan="3">5</th>
                                    <th colspan="3">6</th>
                                    <th colspan="3">7</th>
                                    <th colspan="3">8</th>
                                    <th colspan="3">9</th>
                                </tr>
                                <tr>
                                    <th>ගර්භ සති ගණන</th>
                                    <?php for ($i = 1; $i < 10; $i++) : ?>

                                        <?php if ($this->editMode) : ?>
                                            <td colspan="3"><input type="text" class="form-control" name="week_`<?= $i ?>`" value="<?= $this->charts[0]->{$i} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="3">
                                                <p><?= $this->charts[0]->{$i} ?></p>
                                            </td>
                                        <?php endif; ?>

                                    <?php endfor; ?>

                                </tr>
                                <tr>
                                    <th>බර</th>
                                    <?php for ($i = 1; $i < 10; $i++) : ?>

                                        <?php if ($this->editMode) : ?>
                                            <td colspan="3"><input type="text" class="form-control" name="weight_`<?= $i ?>`" value="<?= $this->charts[1]->{$i} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="3">
                                                <p><?= $this->charts[1]->{$i} ?></p>
                                            </td>
                                        <?php endif; ?>

                                    <?php endfor; ?>

                                </tr>
                                <tr>
                                    <th>බරෙහි වැඩිවීම</th>
                                    <?php for ($i = 1; $i < 10; $i++) : ?>
                                        <td colspan="3">
                                            <p><?php if ($i != 1) : ?>
                                                    <?php $weightgain = $this->charts[1]->{$i} - $this->charts[1]->{$i - 1}; ?>
                                                    <?php if ($weightgain > 0) : ?>
                                                        <?= $weightgain; ?>
                                                    <?php else : ?>
                                                        none
                                                    <?php endif; ?>
                                                <?php else : ?>
                                                    none
                                                <?php endif; ?>
                                            </p>
                                        </td>
                                    <?php endfor; ?>

                                </tr>

                                <tr>
                                    <th>උස</th>
                                    <?php for ($i = 1; $i < 10; $i++) : ?>

                                        <?php if ($this->editMode) : ?>
                                            <td colspan="3"><input type="text" class="form-control" name="height_`<?= $i ?>`" value="<?= $this->charts[2]->{$i} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="3">
                                                <p><?= $this->charts[2]->{$i} ?></p>
                                            </td>
                                        <?php endif; ?>

                                    <?php endfor; ?>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php if ($this->editMode) : ?>
                        <button type="submit" name="saveButton" class="btn btn-primary save ">save</button>
                    <?php endif; ?>

                </form>

                <div class="row">
                    <div class="col-md-6">
                        <canvas id="weight" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="height" width="400" height="400"></canvas>
                    </div>
                </div>


                <script src="<?= PROOT ?>/js/Chart.bundle.js"></script>

                <script>
                    var ctx = document.getElementById('weight');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            label: 'Scatter Dataset',
                            datasets: [{
                                    label: 'BMI',
                                    data: [
                                        <?php for ($i = 1; $i < 10; $i++) : ?>
                                            <?php $x = $this->charts[0]->{$i}; ?>
                                            <?php $weight = $this->charts[1]->{$i} ?>
                                            <?php $height = $this->charts[2]->{$i} ?>
                                            <?php if ($height > 0 and $weight > 0) : ?> {
                                                    x: <?= $x ?>,
                                                    y: <?= ($weight * 10) / ($height ** 2) ?>
                                                },
                                            <?php endif; ?>

                                        <?php endfor; ?>
                                    ],
                                    backgroundColor: [
                                        'rgba(0, 0, 0, 0)'
                                    ],
                                    borderColor: [
                                        'rgba(0, 0, 0, 1)'
                                    ],
                                    borderWidth: 1,

                                },
                                {
                                    label: 'D',
                                    data: [{
                                            x: 0,
                                            y: 0
                                        },
                                        {
                                            x: 16.5,
                                            y: 0.75
                                        },
                                        {
                                            x: 41,
                                            y: 7
                                        }
                                    ],
                                    fill: 2,
                                    borderColor: [
                                        'rgba(252, 3, 3, 1)'
                                    ],
                                    backgroundColor: [
                                        'rgba(252, 3, 3, 0.05)'
                                    ],
                                    borderWidth: 0.5,
                                    pointRadius: 0
                                },
                                {
                                    label: 'C',
                                    data: [{
                                            x: 0,
                                            y: 0
                                        },
                                        {
                                            x: 16.5,
                                            y: 1.75
                                        },
                                        {
                                            x: 41,
                                            y: 11.4
                                        }
                                    ],
                                    fill: 3,
                                    borderColor: [
                                        'rgba(252, 161, 3, 1)'
                                    ],
                                    backgroundColor: [
                                        'rgba(252, 161, 3, 0.05)'
                                    ],
                                    borderWidth: 0.5,
                                    pointRadius: 0
                                },
                                {
                                    label: 'B',
                                    data: [{
                                            x: 0,
                                            y: 0
                                        },
                                        {
                                            x: 16.5,
                                            y: 2.2
                                        },
                                        {
                                            x: 41,
                                            y: 12.5
                                        }
                                    ],
                                    fill: 4,
                                    borderColor: [
                                        'rgba(252, 240, 3, 1)'
                                    ],
                                    backgroundColor: [
                                        'rgba(252, 240, 3, 0.05)'
                                    ],
                                    borderWidth: 0.5,
                                    pointRadius: 0
                                },
                                {
                                    label: 'A',
                                    data: [{
                                            x: 0,
                                            y: 0
                                        },
                                        {
                                            x: 16.5,
                                            y: 3.2
                                        },
                                        {
                                            x: 41,
                                            y: 16
                                        }
                                    ],
                                    fill: 5,
                                    borderColor: [
                                        'rgba(136, 252, 3, 1)'
                                    ],
                                    backgroundColor: [
                                        'rgba(136, 252, 3, 0.05)'
                                    ],
                                    borderWidth: 0.5,
                                    pointRadius: 0
                                },
                                {
                                    label: '',
                                    data: [{
                                            x: 0,
                                            y: 0
                                        },
                                        {
                                            x: 16.5,
                                            y: 3.8
                                        },
                                        {
                                            x: 41,
                                            y: 18
                                        }
                                    ],
                                    fill: false,
                                    borderColor: [
                                        'rgba(3, 252, 69, 1)'
                                    ],
                                    borderWidth: 0.5,
                                    pointRadius: 0
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        max: 18,
                                        min: 0,
                                        stepSize: 2,
                                    },
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'BMI'
                                    }
                                }],
                                xAxes: [{
                                    ticks: {
                                        max: 42,
                                        min: 0,
                                        stepSize: 2,
                                    },

                                    type: 'linear',
                                    position: 'bottom',
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'POA'
                                    }

                                }]
                            }
                        }
                    });
                </script>

                <script>
                    var ctx = document.getElementById('height');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            label: 'Scatter Dataset',
                            datasets: [{
                                label: 'height',
                                data: [
                                    <?php for ($i = 1; $i < 10; $i++) : ?>
                                        <?php $x = $this->charts[0]->{$i}; ?>
                                        <?php $y = $this->charts[2]->{$i}; ?>
                                        <?php if ($y > 0) : ?> {
                                                x: <?= $x ?>,
                                                y: <?= $y ?>
                                            },
                                        <?php endif; ?>

                                    <?php endfor; ?>
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
                                        max: 50,
                                        min: 0,
                                        stepSize: 5,
                                    },
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Fundal height(cm)'
                                    }
                                }],
                                xAxes: [{
                                    ticks: {
                                        max: 42,
                                        min: 0,
                                        stepSize: 2,
                                    },
                                    type: 'linear',
                                    position: 'bottom',
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'POA'
                                    }

                                }]
                            }
                        }
                    });
                </script>
            </div>
        </div>


    </div>
</main>

<?php $this->end(); ?>
