// 58A - Chat Room
// http://codeforces.com/problemset/problem/58/A

import java.util.*;
import java.lang.*;
import java.io.*;

public class ChatRoom58A
{
	public static void main (String[] args) throws java.lang.Exception
	{
		// Input
		Scanner sc = new Scanner(System.in);
		String s = sc.next();

		Character[] hello = {'h', 'e', 'l', 'l', 'o'};
		int index = 0;
		char lookingFor = hello[index];
		for (char c : s.toCharArray()) {
			if (c == lookingFor && index == 4) {
				System.out.println("YES");
				return;
			} else if (c == lookingFor) {
				index++;
				lookingFor = hello[index];
			}
		}

		System.out.println("NO");
	}	
}