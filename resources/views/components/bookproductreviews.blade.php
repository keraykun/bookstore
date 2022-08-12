<p class="section-sort-p ml-2 text-gray-500 text-bold py-1 mt-1" style="flex:3;" >Product Reviews : {{ $review->comments->count() }}</p>
<p class="section-sort-p  border-l border-gray-300 text-center py-2  cursor-pointer " id="sortDate" style="flex:2;">
    <span class="text-gray-500">Sort : </span>Date
    {{-- <span class="sortDate border border-gray-300">
        <span> Recent Day</span>
        <span> Last Day</span>
        <span> Last Week</span>
        <span> Last Month</span>
        <span> Last Years</span>
    </span> --}}
</p>
<p class="section-sort-p  border-l border-r border-gray-300 text-center py-2  cursor-pointer " id="sortDate" style="flex:2;">
    <span class="text-gray-500">Sort : </span>Star
    {{-- <span class="sortStar border border-gray-300">
        <span>5</span>
        <span>4</span>
        <span>3</span>
        <span>2</span>
        <span>1</span>
    </span> --}}
</p>
