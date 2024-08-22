<x-layout>

<div class="container-fluid">
    <div class="row height-custom align-items-center justify-content-center">
        <div class="col-12 py-5">
            <h1 class="text-center display-4 title">
                CIAO
            </h1>
            @if (session('mailInviata'))
    <div class="alert alert-success">
        {{ session('mailInviata') }}
    </div>
@endif
        </div>
    </div>
</div>

</x-layout>