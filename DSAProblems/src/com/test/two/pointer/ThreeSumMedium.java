package com.test.two.pointer;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.Iterator;
import java.util.List;

public class ThreeSumMedium {

	public static void main(String[] args) {
		int[] nums = new int[] { -1, 0, 1, 2, -1, -4 };

		List<List<Integer>> threeSum = threeSum(nums);
		System.out.println(threeSum);

	}

	public static List<List<Integer>> threeSum(int[] nums) {
		List<List<Integer>> result = new ArrayList<List<Integer>>();
		int n = nums.length;
		if (n < 3) {
			return result;
		}

		Arrays.sort(nums);
		
		for (int i = 0; i < n; i++) {
			// if current element and prev are
			//same then we will have same scenario so we are skipping it
			if (i!=0 && nums[i] == nums[i-1]) {
				continue;
			}
			
			int L=i+1, R=n-1;
			
			while (L<R) {
				int cur=nums[i]+nums[L]+nums[R];
				if (cur==0) {
					List<Integer> sub=new ArrayList<>();
					sub.add(nums[i]);
					sub.add(nums[L]);
					sub.add(nums[R]);
					result.add(sub);
					L++;
					R--;
					
					// if the current and prev element are same then move forward
					// and to avoid duplicate elemt in the array
					while(L<R && nums[L] == nums[L-1]) {
						L++;
					}
//					if the current and next element are same then move backward
					while(L<R && nums[R] == nums[R+1]) {
						R--;
					}
					
					
				} else if (cur < 0) {
					L++;
				} else {
					R--;
				}
			}
		}
		return result;

	}

}
