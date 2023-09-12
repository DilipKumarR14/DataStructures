package com.test.two.pointer;

import java.util.Arrays;
import java.util.List;
import java.util.stream.Collectors;

public class RemoveDuplicatesInArray {

	public static void main(String[] args) {
		int[] list = new int[] { 2, 2, 7, 8, 11, 11, 12, 15 };
//		int[] list = new int[] { 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 4 };

		// output = 2,7,8,11,12,15
		int L = 0;
		int R = 1;

		List<Integer> list1 = Arrays.stream(list).boxed().collect(Collectors.toList());

		if (list1.size() < 2) {
			System.out.println("less than 2 element");
			return;
		}

		while (R < list1.size()) {
			if (list1.get(L) != list1.get(R)) {
				L++;
				int temp = list1.get(L);
				list1.set(L, list1.get(R));
				list1.set(R, temp);
			}
			R++;

			System.out.println(list1);
		}

		System.out.println("sublist " + list1.subList(0, L + 1));

	}

}
