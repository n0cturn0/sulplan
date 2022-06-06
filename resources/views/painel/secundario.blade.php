@extends('template')
 @section('secundario')
         <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
          
            <div class="col-md-9 col-lg-7 col-xl-5">
          
           <div class="block-1 pe-xl-70">
           @if ($banner === 0)
           <h5 class="footer-modern-title"> Sem imagems cadastrada para exibição</h5>
           @else
          
          
                  <h5 class="footer-modern-title">Banners  Inseridos</h5>
                  <div class="row row-10 gx-10 gx-10" data-lightgallery="group">
                    @foreach ($imagens as $img)
                    <div class="col-4 col-sm-2 col-lg-4">
                   
                    <a href="{{ url('apagarsecundario/'.$img->id) }}">  Apagar </a>
                      <!-- Thumbnail Minimal--><a class="thumbnail-minimal" href="storage/banner/{{$img->imagem}}" data-lightgallery="item"><img src="storage/banner/{{$img->imagem}}" alt="" width="93" height="93"/></a>
                    </div>
                    @endforeach
                  </div>
                </div>
          @endif
              <h3>Banners secundarios</h3>
              <h5 class="footer-modern-title">Resolução ideal 634x373</h5>
              <!--RD Mailform-->
            
             
              <form   method="post" action="/uploadsecundario" enctype="multipart/form-data">
                  @csrf
                <div class="row row-20 row-narrow">
                  <div class="col-md-6">
                    <div class="form-wrap">
                    <input class="form-input" id="file" type="file" name="arquivo"> 
                      <label class="form-label" for="contact-2-name"></label>
                    </div>
                  </div>
                  <div class="col-md-6">
                   
                  </div>
                  <div class="col-12">
                  
                  </div>
                
                
                  <div class="col-12">
                    <button class="btn btn-block btn-primary" type="submit">Cadastra banner</button>
                  </div>
                </div>
              </form>
               
             
            </div>
          </div>
        </div>
      </section>
      <hr>
      @endsection
      <!--Contact Us-->