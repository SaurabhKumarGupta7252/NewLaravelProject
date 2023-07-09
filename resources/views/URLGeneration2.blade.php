Use of URL::to('endUrl') <a href="{{URL::to('/url')}}">URL Generation</a>
<br><br>
<table border='2'>
    <tr>
        <th>Method</th>
        <th>URL</th>
    </tr>
    <tr>
        <td>
            Current URL
        </td>
        <td>
            {{URL::current()}}
        </td>
    </tr>
    <tr>
        <td>
            Full URL
        </td>
        <td>
            {{URL::full()}}
        </td>
    </tr>
    <tr>
        <td>
            Previous URL
        </td>
        <td>
            {{URL::previous()}}
        </td>
    </tr>
</table>