<div class="container">
<table class="table table-hover table-responsive-sm">
    <tr>
            <thead class="thead-dark">
            <th scope="col">Index</th>
            <th scope="col">Meno</th>
            <th scope="col">Post</th>
            <th scope="col">Status</th>
            
        </tr>
            </thead>
    <?php $i=1;?>
    @forelse($zaujemca as $z)
    
    <tbody>
    <tr>
        <td>{{$i++}}</td>
        <td>{{$z->name}}</td>
        <td>{{$z->posts_id}}</td>
       
        
    </tr>

    </tbody>
    
    @empty
    <p>nič, man</p>
    @endforelse
</table>
</div>