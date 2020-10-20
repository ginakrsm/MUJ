<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice Order</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="6">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{asset('logo.png')}}" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                ID INVOICE : INV-{{$order->oid}}<br>
                                Created : {{$order->created_at}}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="6">
                    <table>
                        <tr>
                            <td>
                                CV. Multi Jaya Usaha<br>
                                Taman Cikas Blok A4 No.11, RT 002/025<br>
                                Pekayon Jaya, Bekasi Selata, <br>
                                Kota Bekasi
                            </td>
                            
                            <td>
                            {{$order->nama_customer}}<br>
                                {{$order->nama_company}}<br>
                                {{$order->no_telpon_customer}}<br>
                                {{$order->alamat_company}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Nama Item
                </td>

                <td>
                    Harga
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    {{$order->nama_ambulance}}
                </td>

                <td>
                    {{$order->harga_ambulance}}
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Nama Item Tambahan
                </td>

                <td>
                    Harga
                </td>
            </tr>
            
            @foreach($details as $i => $detail)
            <tr class="item">
                <td>
                    {{$detail->nama_equipment}}
                </td>

                <td>
                    {{$detail->harga_addon}}
                </td>
            </tr>
            @endforeach
            
            <tr class="total">
                <td>Total: </td>
                <td>
                    Rp. {{$order->total_bayar}}
                </td>
            </tr>
        </table>
    </div>
</body>
</html>