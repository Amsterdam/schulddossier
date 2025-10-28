/**
 * @license EUPL-1.2+
 * Copyright Gemeente Amsterdam
 */

import { type ForwardedRef, forwardRef, type OlHTMLAttributes, type PropsWithChildren } from "react";

import clsx from "clsx";

export type AppNavigationMenuProps = PropsWithChildren<OlHTMLAttributes<HTMLOListElement>>;

export const AppNavigationMenu = forwardRef(
  ({ children, className, ...restProps }: AppNavigationMenuProps, ref: ForwardedRef<HTMLOListElement>) => (

    <ol ref={ref} className={clsx("ams-app-navigation__menu", className)} {...restProps}>
      {children}
    </ol>
  ),
);

AppNavigationMenu.displayName = "AppNavigation.Menu";
