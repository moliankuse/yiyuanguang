 function printBold($inputText)          //定义function printBold（）
    {
        print("<B>" . $inputText . "</B>"); ////打印$inputText
    }
    print("这行没有加重！<BR>\n");         //直接打印字符串
    printBold("这行加重了！！！");          //调用function printBold()函数
    print("<BR>\n");
    print("这行没有加重！<BR>\n");         //直接打印字符串
    
    
