import java.util.Scanner;
import java.util.Arrays;

public class Boy
{
	public static void main(String[] args){
        Scanner reader = new Scanner(System.in);
        String word = reader.next();
        int count = 1;
        String res="";
        char[] ch = word.toCharArray();
        Arrays.sort(ch);
        for(int i=1; i<ch.length; i++)
            if(ch[i-1]!=ch[i])
                ++count;
        if(count%2==0)
            res = "CHAT WITH HER!";
        else
            res = "IGNORE HIM!";
        System.out.println(res);
    }
}
