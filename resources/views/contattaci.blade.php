<x-layout>

<div class="container-fluid">
    <div class="row height-custom align-items-center justify-content-center">
        <div class="col-12">
            <h1 class="text-center display-4 title">
                Contattaci!
            </h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-6 my-5">
            {{--  ! Elementi "lato backend" di un form 
                  1.  attributo name - etichetta, identificativo dell'input/text area 
                  2. attributo method nel FORM - metodo della richiesta
                  3. attributo action nel FORM - azione che deve scattare al click del bottone
            --}} 
        <form class="py-3 px-5 box-bg shadow rounded text-custom" method="POST" action="{{route('contact.submit')}}">
          @csrf
          {{-- cross site request forger . falsificazione di richiesta tra un sito e l'altro --}}
        <div class="mb-3">
    <label for="username" class="form-label">Inserisci il tuo nome completo</label>
    <input type="text" class="form-control" id="username" name="username">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Inerisci la tua email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      </div>
  <div class="mb-3">
    <label for="message" class="form-label">Scrivici il tuo messaggio</label>
    <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
  </div>

  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-dark">Invia</button>
  </div>
  
</form>
        </div>
    </div>
</div>

</x-layout>