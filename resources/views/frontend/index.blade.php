@extends('frontend.layouts.master_home')

@section('content-nc')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron image-home hidden-xs">
        <div class="container">
            <div class="text-center jumbo-top-padding">
                <h1 class="black-transparent">We make checking in anywhere easy!</h1>
                <p class="black-transparent">See what Check-In can do for your business!</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

        </div>
    </div>
@endsection

@section('content')
    <div class="row">

        <div class="col-lg-10 col-lg-offset-1">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Neque porro quisquam</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus scelerisque sagittis. Nulla dictum ex dapibus lacus pulvinar, sit amet posuere nisi aliquam. Mauris in tincidunt mauris, sit amet sollicitudin arcu. Fusce commodo nibh vel augue efficitur, in condimentum est rutrum. Fusce a lobortis libero. </p>
                </div>
                <div class="col-lg-4">
                    <h3>Neque porro quisquam</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus scelerisque sagittis. Nulla dictum ex dapibus lacus pulvinar, sit amet posuere nisi aliquam. Mauris in tincidunt mauris, sit amet sollicitudin arcu. Fusce commodo nibh vel augue efficitur, in condimentum est rutrum. Fusce a lobortis libero. </p>
                </div>
                <div class="col-lg-4">
                    <h3>Neque porro quisquam</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus scelerisque sagittis. Nulla dictum ex dapibus lacus pulvinar, sit amet posuere nisi aliquam. Mauris in tincidunt mauris, sit amet sollicitudin arcu. Fusce commodo nibh vel augue efficitur, in condimentum est rutrum. Fusce a lobortis libero. </p>
                </div>
            </div>
        </div>

    </div><!-- row -->
@endsection

@section('after-scripts-end')
    <script>
        //Being injected from FrontendController
        console.log(test);
    </script>
@stop