<html>
    <head>
        <title>Online Ordering System</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	
	<body>
   
    <div style="width:1000" align=center><h3> Online Ordering System</h3></div>
	<form method="POST" action="submit.php">
	<table bgcolor="black" border="2">
	<tr bgcolor=" gray">
		<td width="800" colspan="3" align="center"> <font size="+2">Menu</font></td>
	</tr>
	<tr bgcolor=" white" >
		<td width="80" rowspan="5"> ※Pasta <br> +2.0 with salad <br> + 1.5 with drink<br>  </td>
		<td bgcolor="white" colspan="2"> <input type="checkbox" name="var1" value="Tomato & basil sauce"><a href="OnlineOrderingSystemGet.php?name=Tomato & basil sauce"> Tomato & basil sauce £8.0</a>
        <input type="radio" name="var" value="with salad"=>with salad
        <input type="radio" name="var" value="with drink"=>wtih drink
         </td>
	</tr>
    <tr>
        <td bgcolor="white"colspan="2"> <input type="checkbox" name="var1" value="Smoke salmon with cream sauce "> Smoke salmon with cream sauce  £7.0
        <input type="radio" name="var1" value="with salad"=>with salad
        <input type="radio" name="var1" value="wtih drink"=>wtih drink
         </td>
    </tr>
	<tr>
        <td bgcolor="white"colspan="2"> <input type="checkbox" name="var1" value="Classic with cream sauce"> Classic with cream sauce £7.0
        <input type="radio" name="var2" value="with salad"=>with salad
        <input type="radio" name="var2" value="wtih drink"=>wtih drink
        </td>
    </tr>
	<tr>
        <td bgcolor="white"colspan="2"> <input type="checkbox" name="var1" value=" Seafood with tomato sauce"> Seafood with tomato sauce £8.5
        <input type="radio" name="var3" value="with salad"=>with salad
        <input type="radio" name="var3" value="wtih drink"=>wtih drink
         </td>
    </tr>
    	<tr>
        <td bgcolor="white"colspan="2"> <input type="checkbox" name="var1" value="Cheese with cream sauce"> Cheese with cream sauce £7.5
        <input type="radio" name="var4" value="with salad"=>with salad
        <input type="radio" name="var4" value="wtih drink"=>wtih drink
        </td>
    </tr>
    <tr bgcolor=" white" >
		<td rowspan="3"> ※Sandwiches <br> +2.0 with salad <br> + 1.5 with drink<br> </td>
		<td bgcolor="white"colspan="2"> <input type="checkbox" name="var1" value="Egg Salad"> Egg Salad £6.0
        <input type="radio" name="var5" value="Extra Cheese"=>Extra Cheese
        <input type="radio" name="var5" value="wtih drink"=>wtih drink
         </td>
	</tr>
    	<tr>
        <td bgcolor="white"colspan="2"> <input type="checkbox" name="var1" value="Vegetarian"> Vegetarian £6.0
        <input type="radio" name="var6" value="Extra Cheese"=>Extra Cheese
        <input type="radio" name="var6" value="wtih drink"=>wtih drink
        </td>
    </tr>
    <tr>
        <td bgcolor="white"colspan="2"> <input type="checkbox" name="var1" value="Turkey Breast"> Turkey Breast £6.0
        <input type="radio" name="var7" value="Extra Cheese"=>Extra Cheese
        <input type="radio" name="var7" value="wtih drink"=>wtih drink
        </td>
    </tr>
    <tr bgcolor=" white" >
		<td width="80" rowspan="3"> ※Snacks  <br> +2.0 with salad <br> + 1.5 with drink<br>  </td>
		<td bgcolor="white"colspan="2"> <input type="checkbox" name="var1" value="Potato Chips"> Potato Chips £2.5
        <input type="radio" name="var8" value="Extra Cheese"=>Extra Cheese
        <input type="radio" name="var8" value="wtih drink"=>wtih drink
    </td>
	</tr>
    <tr>
        <td bgcolor="white"colspan="2"> <input type="checkbox" name="var1" value="French Fries"> French Fries  £2.5
        <input type="radio" name="var9" value="Extra Cheese"=>Extra Cheese
        <input type="radio" name="var9" value="wtih drink"=>wtih drink
        </td>
    </tr>
        <tr>
        <td bgcolor="white"colspan="2"> <input type="checkbox" name="var1" value="Chicken Nuggets"> Chicken Nuggets £4.0
        <input type="radio" name="var10" value="Extra Cheese"=>Extra Cheese
        <input type="radio" name="var10" value="wtih drink"=>wtih drink
        </td>
    </tr>
    
    <tr bgcolor=" white" >
		<td width="80" rowspan="8"> ※Beverage </td>
        <td width="80" rowspan="3"> Coffee </td>
        <td bgcolor="white"> <input type="checkbox" name="var1" value=" Espresso"> Espresso £2.5
        <input type="radio" name="var8" value="small"=>small
        <input type="radio" name="var8" value="large"=>large
        </td>
     </tr>
     <tr>
		<td bgcolor="white"> <input type="checkbox" name="var1" value="Coffee Latte"> Coffee Latte £2.5
        <input type="radio" name="var8" value="small"=>small
        <input type="radio" name="var8" value="large"=>large
        </td>
	</tr>
    <tr>
        <td bgcolor="white"> <input type="checkbox" name="var1" value="Cappuccino"> Cappuccino £2.5
        <input type="radio" name="var9" value="small"=>small
        <input type="radio" name="var9" value="large"=>large
        </td>
    </tr>    
    
    <tr bgcolor=" white" >   
         <td width="80" rowspan="2"> Tea</td>
        <td bgcolor="white"> <input type="checkbox" name="var1" value="English Breakfast Tea "> English Breakfast Tea £2.5
        <input type="radio" name="var10" value="small"=>small
        <input type="radio" name="var10" value="large"=>large
        </td>
    </tr>
        <tr> 
        <td bgcolor="white"> <input type="checkbox" name="var1" value="Earl Grey Tea"> Earl Grey Tea £2.5
        <input type="radio" name="var10" value="small"=>small
        <input type="radio" name="var10" value="large"=>large
        </td>
    </tr>
    <tr bgcolor=" white" > 
    <td width="80" rowspan="3"> Soft drink</td> 
        <td bgcolor="white"> <input type="checkbox" name="var1" value="soda"> soda £2.0
        <input type="radio" name="var10" value="small"=>small
        <input type="radio" name="var10" value="large"=>large
        </td>
    </tr>
    <tr> 
        <td bgcolor="white"> <input type="checkbox" name="var1" value="cider"> cider £2.0
        <input type="radio" name="var10" value="small"=>small
        <input type="radio" name="var10" value="large"=>large
        </td>
    </tr>
    <tr> 
        <td bgcolor="white"> <input type="checkbox" name="var1" value="coke"> coke £2.0
        <input type="radio" name="var10" value="small"=>small
        <input type="radio" name="var10" value="large"=>large
        </td>
    </tr>

    
    
    <tr bgcolor=" gray">
		<td width="1000" colspan="3" align="center"> <font size="+2">Customer information</font></td>
	</tr>
    <tr bgcolor=" white" >
		<td bgcolor="gainsboro "> Table </td>
		<td bgcolor="white"colspan="2"> No. <textarea name="d" cols="2" rows="1"></textarea> 
        </td>
	</tr>
    <tr bgcolor=" white" >
		<td bgcolor="gainsboro "> Number of customer </td>
		<td bgcolor="white"colspan="2"> <textarea name="p" cols="2" rows="1"></textarea> 
        </td>
	</tr>
    <tr bgcolor=" white" >
		<td bgcolor="gainsboro "> Membership No. </td>
		<td bgcolor="white"colspan="2"> <textarea name="w" cols="5" rows="1"></textarea> 
        </td>
	</tr>
    <tr bgcolor=" white" >
		<td bgcolor="gainsboro "> Special request </td>
		<td bgcolor="white"colspan="2"> <textarea name="o" cols="60" rows="10"></textarea> 
        </td>  <tr bgcolor=" gray">
		<td width="800" colspan="3" align="center">
            <div align="center">
              <input type="submit" name="sub" value="Check your meal"font style="cursor:pointer">
              <input type="reset" name="res" value="Clean all" font style="cursor:pointer">
            </div>
        </td>
	</tr>
    </table>
    </form>
	</body>
</html>