<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>f</title>
</head>
<body>
<form method="post" action="<?php echo U('/Home/Order/toform');?>"> 
<div class="container">
	<div class="cart clear">
   		<div class="shadow">
        <table width="100%" border="0">
            <tr>
                <td width="85%">
                  <h3 class="fl">购买到的产品</h3></li>
                </td>
                <td width="10%"> <input type="checkbox" class="checkbox"  name="check_all" id="check_all" > </td>
            </tr>
        </table>
     
       
       <div class="c_list cb">
       	<ul>
        	<li>
            <table>
                <tr>
	                <p><span class="pl15">数量：<input type="text" name="1" > 包</span></p>
                 </tr>
                </table>
               </li>
               <li>
               <table>
                	<tr>
                    <p><span class="pl15">数量：<input type="text" name="2" > 包</span></p>
                    </tr>
                </table>
            </li>
               <li>
               <table>
                	<tr>
                     <p><span class="pl15">tel<input type="text" name="tel" > 包</span></p>
                    </tr>
                </table>
            </li>

        </ul>
       </div>
       
       
    </div>  
    </div>
</div>
<div class="cart_bg">
    <tr>
        <td><button class="submit">去结算</button></td>
    </tr>
</table>
</div> 


</form>

</body>
</html>