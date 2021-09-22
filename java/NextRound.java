import java.util.*;
import java.lang.*;
import java.io.*;

public class NextRound
{
	public static void main (String[] args) throws java.lang.Exception
	{
		Scanner sc = new Scanner(System.in);
		int n = sc.nextInt();
		int k = sc.nextInt();

		List<Integer> scores = new ArrayList<Integer>();

		// Get scores from input
		while (sc.hasNext()) {
			scores.add(sc.nextInt());
		}
		
		int kthPlaceScore = scores.get(k-1);
		int advancers = k;
		
		if (kthPlaceScore == 0) {
			// Eliminate advancers that have non-positive score
			advancers--;
			for (int i = k-2; i >= 0; i--) {
				if (scores.get(i) == 0) advancers--;
				else break;
			}
		} else {
			// Find lower-ranked competitors with same score as k-th place
			for (int i = k; i < scores.size(); i++) {
				if (scores.get(i) == kthPlaceScore) advancers++;
				else break;
			}
		}

		// Output
		System.out.println(advancers);
	}
}