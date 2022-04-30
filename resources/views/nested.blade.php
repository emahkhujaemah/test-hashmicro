@extends('adminlte::page')

@section('title', 'Feature 1')

@section('content_header')
    <h1 class="m-0 text-dark">Feature 1</h1>
@stop

@section('content')
<head>
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
</head>

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body"> 
                <div class="row">
                    <div class="col-md-8">
                        <?php 
                        $angka = [
                            [1,2,3],
                            [4,5,6],
                            [7,8,9]
                        ];
                    
                        $ip = 2.75;
                        $x = 76;
                        $y = 43;
                    
                        ?>
                    
                        <?php foreach($angka as $a) : ?>
                            <?php foreach($a as $b) : ?>
                                <div class="kotak"><?= $b; ?></div>
                            <?php endforeach; ?>
                            <div class="clear"></div>
                        <?php endforeach; ?>
                    
                        <?php  ?>
                        <h4>Apakah anda bisa megambil 24 sks ?</h4>
                    
                        <?php if($ip >= 3) { ?>
                            <h5>Anda bisa mengambil 24 sks</h5>
                        <?php }else{ ?>
                            <h5>Anda Tidak dapat mengambil 24  sks</h5>
                            <?php if($ip >=2.5 && $ip <=2.99) { ?>
                                <h5>Hanya bisa ambil 21 sks</h5>
                            <?php }elseif ($ip>=2 && $ip <=2.49) { ?>
                                <p>Hanya bisa ambil 18 sks</p>
                                <?php }elseif ($ip >=1.5 && $ip <=1.99){?>
                                <p>Hanya bisa ambil 15 sks</p>
                                <?php }else{ ?>
                                <p>Hanya bisa ambil 12 sks</p>
                        <?php }} ?>
                    
                        <?php $add = $x + $y; ?>
                        <?php $subtract = $x + $y; ?>
                        <?php $divide = $x / $y; ?>
                        <?php $multiply = $x * $y; ?>
                    
                        <h2>Add</h2>
                        <h3><?= $x ?> + <?= $y ?> = <?= $add ?></h3>
                        <h2>Subtract</h2>
                        <h3><?= $x ?> - <?= $y ?> = <?= $subtract ?></h3>
                        <h2>Divide</h2>
                        <h3><?= $x ?> : <?= $y ?> = <?= $divide ?></h3>
                        <h2>Multiply</h2>
                        <h3><?= $x ?> x <?= $y ?> = <?= $multiply ?></h3>
                    </div>
                </div>
            
            </div>


        </div>
    </div>
</div>


@stop
