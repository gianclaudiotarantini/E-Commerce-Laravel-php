 @if($paginator->hasPages())                {{--  Verifica se ci sono pagine disponibili  --}}
    <nav class="page-section">
        <ul class="pagination">
            @if($paginator->onFirstPage()) {{-- Verifica se la pagina corrente è la prima e disabilita il link "<" --}}
                <li class="page-item disabled">
                    <a class="page-link" href="javascript:void(0)" aria-label="Previous"
                        style="color:#6c757d;">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    </a>
                </li>
            @else
                <li class="page-item">      {{--- Altrimenti crea il link "<" generando un URL --}}
                    <a class="page-link" href="{{$paginator->previousPageUrl()}}" aria-label="Previous">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    </a>
                </li>
            @endif
            
            
            @foreach ($elements as $element)
                @if(is_string($element))   {{--- Se è una stringa e quindi contiene ... crea un link disabilitato --}}
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0)">{{$element}}</a>
                    </li>
                @endif

                @if(is_array($element))  {{-- Se non contiene i 3 puntini ma solo numeri  --}}
                    @foreach ($element as $page=>$url)
                        @if($page == $paginator->currentPage()) {{-- Illumina con active il numero della pagina in cui ti trovi  --}}
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">{{$page}}</a>
                            </li>
                        @else  {{-- Altrimenti se non ti trovi nella pagina corrente crea un link con il numero della pagina e genera un URL --}}
                            <li class="page-item">
                                <a class="page-link" href="{{$url}}">{{$page}}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            


            @if($paginator->hasMorePages())  {{--- Verifica se ci sono pagine successive e crea il link ">" con un URL --}}
                <li class="page-item">
                    <a href="{{$paginator->nextPageUrl()}}" class="page-link" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
            @else {{--- Altrimenti disabilita il link ">"  --}}
                <li class="page-item disabled">
                    <a href="javascript:void(0)" class="page-link" aria-label="Next" style="color:#6c757d;">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif