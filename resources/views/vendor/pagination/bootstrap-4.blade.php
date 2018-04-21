@if ($paginator->hasPages())
    <div class="">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><span class="page-link">&lsaquo;</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            @if (!empty($_GET['per_page']))
                                <?php
                                $url .= "&per_page={$_GET['per_page']}";
                                ?>
                            @endif
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"
                                         rel="next">&rsaquo;</a></li>
            @else
                <li class="page-item disabled"><span class="page-link">&rsaquo;</span></li>
            @endif
        </ul>

        <?php $optionsPerPage = [15, 30, 50, 100, 200, 500]; ?>

        <form action="{{ url()->full() }}">
            <input type="hidden" name="page" value="{{ $paginator->currentPage() }}"/>
            <div class="form-group">
                <label for="exampleSelect1">Quantidade</label>
                <select class="form-control" onchange="this.form.submit()" name="per_page">
                    @foreach($optionsPerPage as $option)
                        @if ($option == $paginator->perPage())
                            <option selected value="{{ $option }}">{{ $option }}</option>
                        @else
                            <option>{{ $option }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </form>
    </div>
@endif
