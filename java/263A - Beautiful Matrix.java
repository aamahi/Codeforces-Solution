
import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
		char[][] matrix = new char[5][5];
		for (int i = 0; i < 5; i++)
			matrix[i] = in.nextLine().replaceAll(" ", "").toCharArray();
		int R = -1, C = -1;
		for (int i = 0; i < 5; i++) {
			for (int j = 0; j < 5; j++) {
				if (matrix[i][j] == '1') {
					R = i;
					C = j;
					break;
				}
			}
		}
		int moves = Math.abs(R - 2) + Math.abs(C - 2);
		System.out.println(moves);

		in.close();

	}

}