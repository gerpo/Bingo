<td wire:click="checkItem" class="@if($cardItem->checked) text-opacity-25 bg-gray-300 shadow-inner opacity-50 line-through @endif p-5 font-semibold text-center align-middle border-2 border-gray-200 cursor-pointer">
    <p wire:loading.remove class="m-0 h-7">&nbsp;&nbsp;{{ $cardItem->valueData->value }}&nbsp;&nbsp;</p>
    <svg wire:loading xmlns="http://www.w3.org/2000/svg" class="w-full m-0 h-7" display="inline-block" preserveAspectRatio="xMidYMid" style="margin:auto;background:0% 0%" viewBox="0 0 100 100">
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6">
            <animate attributeName="opacity" begin="-0.9166666666666666s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6" transform="rotate(30 50 50)">
            <animate attributeName="opacity" begin="-0.8333333333333334s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6" transform="rotate(60 50 50)">
            <animate attributeName="opacity" begin="-0.75s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6" transform="rotate(90 50 50)">
            <animate attributeName="opacity" begin="-0.6666666666666666s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6" transform="rotate(120 50 50)">
            <animate attributeName="opacity" begin="-0.5833333333333334s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6" transform="rotate(150 50 50)">
            <animate attributeName="opacity" begin="-0.5s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6" transform="rotate(180 50 50)">
            <animate attributeName="opacity" begin="-0.4166666666666667s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6" transform="rotate(210 50 50)">
            <animate attributeName="opacity" begin="-0.3333333333333333s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6" transform="rotate(240 50 50)">
            <animate attributeName="opacity" begin="-0.25s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6" transform="rotate(270 50 50)">
            <animate attributeName="opacity" begin="-0.16666666666666666s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6" transform="rotate(300 50 50)">
            <animate attributeName="opacity" begin="-0.08333333333333333s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
        <rect width="6" height="12" x="47" y="24" fill="#fe718d" rx="3" ry="6" transform="rotate(330 50 50)">
            <animate attributeName="opacity" begin="0s" dur="1s" keyTimes="0;1" repeatCount="indefinite" values="1;0" />
        </rect>
    </svg>
</td>