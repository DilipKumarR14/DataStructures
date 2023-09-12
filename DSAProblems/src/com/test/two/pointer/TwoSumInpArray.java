package com.test.two.pointer;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Iterator;
import java.util.List;
import java.util.stream.Collector;
import java.util.stream.Collectors;

public class TwoSumInpArray {

	public static void main(String[] args) {
//		int[] list=new int[] {2,7,11,15};
//		int[] list=new int[] {2,3,4};
		int[] list=new int[] {-1, 0};
//		int[] result=new int[] {} ;
		int target=-1;
		ArrayList<Object> res=new ArrayList<>();
//		for (int i = 0; i < list.length; i++) {
//			for (int j = i+1; j < list.length; j++) {
//				if (list[i] + list[j] == target) {
////					System.out.println(i);
////					System.out.println(j);
//					res.add(i+1);
//					res.add(j+1);
//					System.out.println(res);
//					return;
//				} else {
//					System.out.println(res);
//				}
//			}
//		}
		
		//TWO POINTER
		
		List<Integer> collect = Arrays.stream(list).boxed().collect(Collectors.toList());
		
		System.out.println(collect);
		
		int start=0;
		int end=collect.size()-1;
		System.out.println("Target "+target);
		for (int i = 0; i < collect.size() - 1; i++) {
			int j = collect.get(start)+collect.get(end);
			if (j == target) {
				res.add(start);
				res.add(end);
				System.out.println("res " + res);
				return;
			} else if (j > target) {
				end--;
			} else {
				start++;
			}
		}
		
		
		
	}

}
