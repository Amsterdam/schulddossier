import type { ReactNode } from "react";

export interface ReactPropsWithChildren {
  children?: ReactNode
}

export type ReactPropsWithChildrenReadonly = Readonly<ReactPropsWithChildren>;
