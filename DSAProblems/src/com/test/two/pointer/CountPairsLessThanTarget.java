package com.test.two.pointer;

import java.util.ArrayList;
import java.util.Collections;
import java.util.HashSet;

public class CountPairsLessThanTarget {

	public static void main(String[] args) {

//		int[] nums = new int[] { -1, 1, 2, 3, 1 };
		int[] nums1 = new int[] { -6, 2, 5, -2, -7, -1, 3 };
		int target = -2;
		
		
		ArrayList<Integer> nums = 
	            new ArrayList<Integer>();

		for (int i = 0; i < nums1.length; i++) {
			nums.add(nums1[i]);
		}
//		
//		HashSet<String> result = new HashSet<String>();
//
//		int start = 0;
//		int end = start + 1;
//
////		List<Integer> numList = IntStream.of(nums).boxed().collect(Collectors.toList());
//		
//		
//
//		while (end < numList.size()) {
//			if (numList.get(start) + numList.get(end) < target) {
//				result.add(start + "," + end);
//			}
////			int[] nums = new int[] { -1, 1, 2, 3, 1 };
//
//			end++;
//
//			if (end == numList.size()) {
//				start++;
//				end = start + 1;
//			}
//
//		}
//		
//		for (String res : result) {
//			System.out.println(res);
//		}
//
//		if (result != null) {
//			System.out.println(result.size());
//		}
		
		//
		
//		int[] nums1 = new int[] { -6, 2, 5, -2, -7, -1, 3 };
		Collections.sort(nums); // sort the vector nums
//		[-7, -6, -2, -1, 2, 3, 5]

		System.out.println(nums); 
		
        int count = 0; // variable to store the count
        int left = 0; // variable to store the left
        int right = nums.size()-1; // variable to store the right
        while(left < right){ // loop until left is less than right
            if(nums.get(left) + nums.get(right) < target){ // if nums[left] + nums[right] is less than target
                count += right-left; // update the count
                left++; // increment the left
            }
            else{ // else
                right--; // decrement the right
            }
        }
        System.out.println(count);

	}

}
