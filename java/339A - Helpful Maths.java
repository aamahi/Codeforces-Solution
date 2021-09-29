
import java.util.*;
import java.io.*;


public class Hello {

    public static void main(String[] args) {
       
       
        Scanner in = new Scanner(System.in);
        String first1 = in.next();
       
        first1 = first1.replace("+", "");
        char []arr = first1.toCharArray();
        //System.out.println(first1);
       
        Arrays.sort(arr);
        //System.out.println(arr);
       
        //String sorted = new String(arr);
       
        for(int i=0;i<arr.length;i++){
            System.out.print(arr[i]);
            if(i == arr.length-1)
                continue;
            System.out.print("+");           
        }
        System.out.println();
    }
}