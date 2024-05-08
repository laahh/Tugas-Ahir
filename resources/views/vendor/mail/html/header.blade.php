@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="https://i.ibb.co/dfkWPCL/02-Konven-FC-Big-7014x3590-7.png" class="logo" alt="Laravel Logo">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>