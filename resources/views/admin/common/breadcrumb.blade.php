 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{ucwords(explode("-",request()->route()->getName())[0])}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <?php $i=0;?>
                            @foreach(explode("-",request()->route()->getName()) as $bcumb)
                             <li 
                             @if($i==count(explode("-",request()->route()->getName()))-1)
                                class="active"
                             @endif     
                             >
                              @if($i<count(explode("-",request()->route()->getName()))-1)
                               <a href="{{url($bcumb)}}">{{explode("-",request()->route()->getName())[$i]}}</a>
                              @else
                                 {{explode("-",request()->route()->getName())[$i]}}
                              @endif   
                             </li>
                              <?php $i=$i+1;?>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>        