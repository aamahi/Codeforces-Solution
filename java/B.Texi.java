import java.util.Scanner;
import java.util.Arrays;
public static void main(String[] args){
    Scanner s = new Scanner(System.in);
    int n = s.nextInt();
    int a[] = new int[n];
    int sum = 0;
    for(int i = 0;i<n;i++){
        a[i] = s.nextInt();
        sum += a[i];
    }
    int ans = 0;
    if(sum%4 != 0){
        ans = ans+sum/4+1;
        System.out.println(ans);

    }
    if(sum%4 == 0){
        ans  = ans+sum/4;
        System.out.println(ans);
    }

}