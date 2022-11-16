@if ($paginator->hasPages())
    <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
            <div class="dataTables_info" id="DataTables_Table_1_info" role="status"
                 aria-live="polite">نمایش {{ $paginator->firstItem() }} تا {{ $paginator->lastItem() }}
                از {{ $paginator->total() }} نوشته
            </div>
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())

                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                        <a href="#"
                           aria-controls="DataTables_Table_0"
                           data-dt-idx="0"
                           tabindex="0"
                           class="page-link">
                            قبلی</a>
                    </li>
                @else

                    <li class="page-item" id="DataTables_Table_0_previous">
                        <a href="{{ $paginator->previousPageUrl() }}"
                           aria-controls="DataTables_Table_0"
                           data-dt-idx="0"
                           tabindex="0"
                           class="page-link"
                           rel="prev"
                        >
                            قبلی</a>
                    </li>
                @endif

                @foreach($elements as $element)
                    @if(is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    @if(is_array($element))
                        @foreach($element as $page => $url)
                            @if($page == $paginator->currentPage())
                                <li class="paginate_button page-item active" aria-current="page"><a href="#"
                                                                                                    aria-controls="DataTables_Table_0"
                                                                                                    data-dt-idx="2"
                                                                                                    tabindex="0"
                                                                                                    class="page-link">{{ $page }}</a>
                                </li>
                            @else
                                <li class="paginate_button page-item"><a href="{{ $url }}"
                                                                         aria-controls="DataTables_Table_0"
                                                                         data-dt-idx="2"
                                                                         tabindex="0" class="page-link">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())

                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a
                            href="{{ $paginator->nextPageUrl() }}"
                            aria-controls="DataTables_Table_0"
                            data-dt-idx="7" tabindex="0"
                            class="page-link" rel="next">بعدی</a>
                    </li>
                @else
                    <li class="paginate_button page-item disabled" id="DataTables_Table_0_next"><span
                            aria-controls="DataTables_Table_0"
                            data-dt-idx="7" tabindex="0"
                            class="page-link">بعدی</span>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    </div>
@endif
