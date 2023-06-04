@extends('admin.layouts.layout')


@section('content')

       <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <p>Количество заказов</p>

                                <h3>150</h3>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">Давай поподробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <p>Количество категорий</p>

                                <h3>{{ $categories }}</h3>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('categories.index') }}" class="small-box-footer">Давай поподробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <p>Количество товаров</p>

                                <h3>{{ $products }}</h3>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ route('products.index') }}" class="small-box-footer">Давай поподробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <p>Количество тегов</p>

                                <h3>{{ $tags }}</h3>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('tags.index') }}" class="small-box-footer">Давай поподробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-white">
                            <div class="inner">
                                <p>Количество пользователей</p>

                                <h3>{{ $users }}</h3>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('users.index') }}" class="small-box-footer">Давай поподробнее <i class="fas
                            fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-white">
                            <div class="inner">
                                <p>Количество цветов</p>

                                <h3>{{ $colors }}</h3>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('colors.index') }}" class="small-box-footer">Давай поподробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>
            </div><!-- /.container-fluid -->

        <!-- /.content -->

@endsection
