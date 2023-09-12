package com.test.two.pointer;

import java.util.Arrays;
import java.util.List;
import java.util.stream.Collector;
import java.util.stream.Collectors;

public class MoveZeros {

	public static void main(String[] args) {
		int[] collect = new int[] { 0, 1, 0, 3, 12 };
		
//		int[] collect = new int[] { 0, 0, 0, 0, 1};


		List<Integer> list = Arrays.stream(collect).boxed().collect(Collectors.toList());

		System.out.println(list);

		int k = 0;
		int j = 0;
		int i = 0;

//		while (i < list.size()) {
//			if (list.get(j) != 0) {
//				int temp = list.get(j);
//				list.set(j, list.get(i));
//				list.set(i, temp);
//				i++;
//				System.out.println(list);
//			}
//			if (j != list.size() - 1) {
//				j++;
//			}
//			
//		}

		System.out.println(list);
		
		
		
		// two pointer
		
		List<Integer> list1 = Arrays.stream(collect).boxed().collect(Collectors.toList());

		int n=list1.size();
		
		if (n<2) {
			return;
		}
		
		int L=0, R=1;
		
		while(R < n) {
			if (list1.get(L) != 0) {
				L++;
				R++;
			} else if (list1.get(R) == 0) {
				R++;
			} else {
				int temp=list1.get(R);
				list1.set(R, list1.get(L));
				list1.set(L, temp);
			}
			System.out.println(list1);
		}
		
		
		
		
		
		

	}

}
