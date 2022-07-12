<table class="table table-hover">
    <caption>以上数据仅供参考</caption>
    <thead>
    <tr>
        <th>项目</th>
        <th>数量</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $key=>$val)
        <tr>
            <td>{{$key}}</td>
            <td>{{$val}}</td>
        </tr>
    @endforeach
    </tbody>

</table>


<p>
    中国股市仅仅经过几十年的发展，并不能与国际上成熟的股票交易市场一概而论，中国股市并非完全意义上的价值投资，所以仅仅依靠技术指标和股票基本面情况是不可能完全掌握和判断股票市场投资方式的。
</p>
<p>
    另外在短期投资尤其是超短期投资当中，由于中国股市独有的这种特点很大程度上受到预期和股市偏向热点的影响更加明显，从而导致很多技术指标失效的情况;所以说，短期内的投资技术指标可以进行少量的参考，长期的作用可能更加明显，但是并没有任何一个指标能够完全100%的准确判断。
</p>


<style>
    p {
        text-indent: 2em;
    }
</style>
